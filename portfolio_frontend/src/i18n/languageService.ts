import en from './langs/en.json';
import es from './langs/es.json';

import { type Lang } from '../types/lang';

import { LANGUAGE_CHOSEN } from '../utils/constants';

const languages = {
    "en": en,
    "es": es
}

export const chosenLang = LANGUAGE_CHOSEN || 'en';
export default languages[chosenLang] as Lang;
