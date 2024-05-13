import { LANGUAGE_CHOSEN } from '../utils/constants';

/**
 * Function to format a date
 * @param {Date} date - Date to format
 */
export const dateFormatter = new Intl.DateTimeFormat(
        LANGUAGE_CHOSEN, 
        { 
            month: 'long', 
            year: 'numeric' 
        }
);
