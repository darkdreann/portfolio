import { chosenLang } from "../i18n/languageService";

export const dateFormatter = new Intl.DateTimeFormat(
        chosenLang, 
        { 
            month: 'long', 
            year: 'numeric' 
        }
);
