#!/usr/bin/env python

import pandas as pd
import numpy as np
import pickle

import sys

def predict(date, hour):
    data = pd.read_csv('D:\cd\machine-learning\dataset_bersih.csv')
    data.set_index('Date',inplace=True)
    data.index = pd.to_datetime(data.index)
    model_arah_angin = pickle.load(open('D:\cd\machine-learning\model_arah_angin.sav','rb'))
    model_kec_angin = pickle.load(open('D:\cd\machine-learning\model_kec_angin.sav','rb'))
    model_hujan = pickle.load(open('D:\cd\machine-learning\model_hujan.sav','rb'))

    data_hujan = data.drop(['Label','Kecepatan','Degrees','Arah Angin'],axis=1)
    data_angin = data.drop(['Akumulasi','Label','Kecepatan','Degrees','Arah Angin'],axis=1)

    predicted_hujan = model_hujan.predict(data_hujan.loc[date+' '+hour].values.reshape(1,-1))[0]
    predicted_proba = model_hujan.predict_proba(data_hujan.loc[date+' '+hour].values.reshape(1,-1))[0]
    predicted_proba = str(np.round(predicted_proba[np.argmax(predicted_proba)],2)*100).split('.')[0]+' %'
    predicted_arah = model_arah_angin.predict(data_angin.loc[date+' '+hour].values.reshape(1,-1))[0]
    predicted_kec = model_kec_angin.predict(data_angin.loc[date+' '+hour].values.reshape(1,-1))[0]
    predicted_kec = str(format(predicted_kec *3.6, '.2f'))+' km/jam'


    return {
        "hujan":predicted_hujan,
        "proba":predicted_proba,
        "arah":predicted_arah,
        "kecepatan":predicted_kec
    }