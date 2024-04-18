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

type PersonalData = {
    title: string;
    cv_button: string;
    about_me: string;
    img_alt: string;
}

type Experience = {
    title: string;
    experience: string;
    no_end_date: string;
    experience_icon: string;
}

type Education = {
    title: string;
    education: string;
    courses: string;
    education_icon: string;
    courses_icon: string;
}

type Skills = {
    title: string;
    technical_skills: string;
    soft_skills: string;
    technical_skill_icon: string;
    soft_skill_icon: string;
}

type Project = {
    title: string;
    projects: string;
    img_alt: string;
    youtube_link: string;
    github_link: string;
    web_link: string;
}

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

type Error = {
    title_404: string;
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
}

export type Lang = {
    nav: Nav;
    personal_data: PersonalData;
    experience: Experience;
    education: Education;
    skills: Skills;
    project: Project;
    contact: Contact;
    error: Error;
}