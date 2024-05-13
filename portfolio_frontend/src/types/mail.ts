/**
 * Mail type
 * @typedef {Object} Mail
 * @property {string} name - Name of the sender
 * @property {string} email - Email of the sender
 * @property {string} message - Message of the sender
 */
export type Mail = {
    name: string;
    email: string;
    message: string;
}