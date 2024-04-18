import { type Experience } from '../types/experience';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';

export const getExperiences = async (): Promise<Experience[]> => {
    try{
        const response = await fetch(`${API_URL}/experiences`);
        const data = await response.json();
        const experiences: Experience[] = data.data.map((exp: any) => ({
            ...exp,
            start_date: new Date(exp.start_date),
            end_date: exp.end_date ? new Date(exp.end_date) : undefined,
        }));
        return experiences;

    }catch(e){
        const error: Error = {
            title: lang.error.education,
            message: e.message,
            date: new Date()
        }
        
        fetch(`${API_URL}/errors`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(error)
        }).catch(() => {
            console.log(lang.error.error_saving);
        });	

        throw e;
    }

}