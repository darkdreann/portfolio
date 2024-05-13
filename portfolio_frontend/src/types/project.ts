import { type TechnicalSkill } from './technical_skill';

/**
 * Project type
 * @typedef {Object} Project
 * @property {string} image - Image of the project
 * @property {string} title - Title of the project
 * @property {string} description - Description of the project
 * @property {TechnicalSkill[]} technologies - Technologies used in the project
 * @property {string} github - Github link of the project
 * @property {string} youtube - Youtube link of the project
 * @property {string} website - Website link of the project
 */
export type Project = {
    image: string;
    title: string;
    description: string;
    technologies: TechnicalSkill[];
    github: string;
    youtube: string;
    website: string;
}