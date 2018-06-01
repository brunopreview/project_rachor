import axios from 'axios'

export const RestConnection = axios.create({
	baseURL: process.env.BASE_URL || 'http://localhost/rachor/'
})