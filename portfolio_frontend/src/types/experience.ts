/**
 * Type definition for Experience object
 * @typedef {Object} Experience
 * @property {string} position - Position of the experience
 * @property {string} description - Description of the experience
 * @property {string} company - Company of the experience
 * @property {Date} start_date - Start date of the experience
 * @property {Date} end_date - End date of the experience
 */
export type Experience = {
    position: string;
    description: string;
    company: string;
    start_date: Date;
    end_date?: Date;
}