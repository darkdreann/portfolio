/**
 * Types for language files
 * @property {string} about_me - About me
 * @property {string} projects - Projects
 * @property {string} experience - Experience
 * @property {string} education - Education
 * @property {string} skills - Skills
 * @property {string} contact - Contact
 * @property {string} open_nav_icon - Open nav icon text
 * @property {string} footer - Footer text
 */
type Nav = {
    about_me: string;
    projects: string;
    experience: string;
    education: string;
    skills: string;
    contact: string;
    open_nav_icon: string;
    footer: string;
}

/**
 * Types for language files
 * @property {string} title - Title of the personal data
 * @property {string} cv_button - CV button text
 * @property {string} about_me - About me text
 * @property {string} img_alt - Image alt text
 */
type PersonalData = {
    title: string;
    cv_button: string;
    about_me: string;
    img_alt: string;
}

/**
 * Types for language files
 * @property {string} title - Title of the experience
 * @property {string} experience - Experience text
 * @property {string} no_end_date - No end date text
 */
type Experience = {
    title: string;
    experience: string;
    no_end_date: string;
    experience_icon: string;
}

/**
 * Types for language files
 * @property {string} title - Title of the education
 * @property {string} education - Education text
 * @property {string} courses - Courses text
 * @property {string} education_icon - Education icon text
 * @property {string} courses_icon - Courses icon text
 */
type Education = {
    title: string;
    education: string;
    courses: string;
    education_icon: string;
    courses_icon: string;
}

/**
 * Types for language files
 * @property {string} title - Title of the skills
 * @property {string} technical_skills - Technical skills text
 * @property {string} soft_skills - Soft skills text
 * @property {string} technical_skill_icon - Technical skill icon text
 * @property {string} soft_skill_icon - Soft skill icon text
 */
type Skills = {
    title: string;
    technical_skills: string;
    soft_skills: string;
    technical_skill_icon: string;
    soft_skill_icon: string;
}

/**
 * Types for language files
 * @property {string} title - Title of the project
 * @property {string} projects - Projects text
 * @property {string} img_alt - Image alt text
 * @property {string} youtube_link - Youtube link
 * @property {string} github_link - Github link
 * @property {string} web_link - Web link
 */
type Project = {
    title: string;
    projects: string;
    img_alt: string;
    youtube_link: string;
    github_link: string;
    web_link: string;
}

/**
 * Types for language files
 * @property {string} title - Title of the contact
 * @property {string} contact - Contact text
 * @property {string} name - Name text
 * @property {string} email - Email text
 * @property {string} message - Message text
 * @property {string} send - Send text
 * @property {string} sendResultSuccess - Send result success text
 * @property {string} sendResultError - Send result error text
 */
type Contact = {
    title: string;
    contact: string;
    name: string;
    email: string;
    message: string;
    send: string;
    sendResultSuccess: string;
    sendResultError: string;
}

/**
 * Types for language files
 * @property {string} title_404 - Title of the 404 error
 * @property {string} image_404_alt - Image alt text
 * @property {string} personal_data - Personal data error
 * @property {string} personal_image - Personal image error
 * @property {string} courses - Courses error
 * @property {string} education - Education error
 * @property {string} experience - Experience error
 * @property {string} mail - Mail error
 * @property {string} project - Project error
 * @property {string} tech_skills - Tech skills error
 * @property {string} soft_skills - Soft skills error
 * @property {string} error_saving - Error saving error
 * @property {string} rebuild - Rebuild error
 */
type Error = {
    title_404: string;
    image_404_alt: string;
    personal_data: string;
    personal_image: string;
    courses: string;
    education: string;
    experience: string;
    mail: string;
    project: string;
    tech_skills: string;
    soft_skills: string;
    error_saving: string;
    rebuild: string;
}

/**
 * Types for language files
 * @property {Nav} nav - Nav text
 * @property {PersonalData} personal_data - Personal data text
 * @property {Experience} experience - Experience text
 * @property {Education} education - Education text
 * @property {Skills} skills - Skills text
 * @property {Project} project - Project text
 * @property {Contact} contact - Contact text
 * @property {Error} error - Error text 
 */
export type Language = {
    nav: Nav;
    personal_data: PersonalData;
    experience: Experience;
    education: Education;
    skills: Skills;
    project: Project;
    contact: Contact;
    error: Error;
}

/**
 * Types for language files
 * @property {string} [key: string] - Key of the language
 */
export type Languages = {
    [key: string]: Language;
}