import { type Course } from '../types/course';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const getCourses = async (): Promise<Course[]> => {
    try{
        const response = await fetch(`${API_URL}/courses`);
        const data = await response.json();
        const course = data.data as Array<Course>;
        return course;

    }catch(e){
        const error: Error = {
            title: lang.error.courses,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }
}