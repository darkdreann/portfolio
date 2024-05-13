import { type Course } from '../types/course';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * function to get all courses from the API
 * @returns {Promise<Course[]>} - Return a promise with an array of courses
 */
export const getCourses = async (): Promise<Course[]> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/courses`);
        const data = await response.json();
        const course = data.data as Array<Course>;
        return course;

    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.courses,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }
}