/**
 * Type definition for error register
 * @typedef {Object} ErrorRegister
 * @property {string} title - Title of the error
 * @property {string} message - Message of the error
 * @property {Date} date - Date of the error    
 */
export type ErrorRegister = {
    title: string;
    message: string;
    date: Date;
}