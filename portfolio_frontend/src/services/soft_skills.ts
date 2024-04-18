import { type SoftSkill } from '../types/soft_skill';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const getSoftSkills = async (): Promise<SoftSkill[]> => {
    try{
        const response = await fetch(`${API_URL}/soft-skills`);
        const data = await response.json();
        const softSkills = data.data as Array<SoftSkill>;
        return softSkills;
    }catch(e){
        const error: Error = {
            title: lang.error.soft_skills,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}