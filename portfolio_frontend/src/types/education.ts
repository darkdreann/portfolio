/**
 * Education type
 * @typedef {Object} Education
 * @property {string} certification - Certification of the education
 * @property {string} institution - Institution of the education
 * @property {string} completion_year - Year of completion of the education
 */
export type Education = {
    certification: string;
    institution?: string;
    completion_year: string;
}