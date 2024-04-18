import { type PersonalData } from '../types/personal_data';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const getPersonalData = async (): Promise<PersonalData> => {
    try{
        const response = await fetch(`${API_URL}/personal-data`);
        const data = await response.json();
        const personalData = data.data as PersonalData;
        return personalData;

    }catch(e){
        const error: Error = {
            title: lang.error.personal_data,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }
    
}

export const getPersonalImage = async (): Promise<string> => {
    try{
        const response = await fetch(`${API_URL}/personal-image`);
        const data = await response.json();
        const image = data.image as string;
        return image;

    }catch(e){
        const error: Error = {
            title: lang.error.personal_image,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }
    
}