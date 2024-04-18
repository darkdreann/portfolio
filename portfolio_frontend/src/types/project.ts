import { type TechnicalSkill } from './technical_skill';

export type Project = {
    image: string;
    title: string;
    description: string;
    technologies: TechnicalSkill[];
    github: string;
    youtube: string;
    website: string;
}