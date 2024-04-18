import { type Project } from '../types/project';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const getProjects = async (): Promise<Project[]> => {
    try{
        const response = await fetch(`${API_URL}/projects`);
        const data = await response.json();
        const project = data.data as Array<Project>;
        return project;
    }catch(e){
        const error: Error = {
            title: lang.error.project,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}