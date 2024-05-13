import { type Project } from '../types/project';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to get all projects from the API
 * @returns {Promise<Project[]>} - Return a promise with an array of projects
 */
export const getProjects = async (): Promise<Project[]> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/projects`);
        const data = await response.json();
        const project = data.data as Array<Project>;
        return project;
    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.project,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}