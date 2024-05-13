import en from './langs/en.json';
import es from './langs/es.json';
import { type Language, type Languages } from '../types/lang';
import { LANGUAGE_CHOSEN } from '../utils/constants';

// Define the languages available
const languages: Languages = {
    "en": en,
    "es": es
}
// Get the chosen language
const CHOSEN_LANG: string = LANGUAGE_CHOSEN || 'en';
const LANG_RESOURCE: Language = languages[CHOSEN_LANG];

export default LANG_RESOURCE;
