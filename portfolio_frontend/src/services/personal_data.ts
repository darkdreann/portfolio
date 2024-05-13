import { type PersonalData } from '../types/personal_data';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to get the personal data from the API
 * @returns {Promise<PersonalData>} - Return a promise with the personal data
 */
export const getPersonalData = async (): Promise<PersonalData> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/personal-data`);
        const data = await response.json();
        const personalData = data.data as PersonalData;
        return personalData;

    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.personal_data,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }
    
}

/**
 * Function to get the personal image from the API
 * @returns {Promise<string>} - Return a promise with the personal image
 */
export const getPersonalImage = async (): Promise<string> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/personal-image`);
        const data = await response.json();
        const image = data.data?.image as string;
        return image;

    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.personal_image,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }
    
}