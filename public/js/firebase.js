// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBfXbQQai5Pv8qoLGnvhZaUcti1A-8xS0U",
  authDomain: "ddmrp-binus.firebaseapp.com",
  projectId: "ddmrp-binus",
  storageBucket: "ddmrp-binus.appspot.com",
  messagingSenderId: "225273155460",
  appId: "1:225273155460:web:7b1a5ed90b832b688297d1",
  measurementId: "G-QPEZPR5P8Z"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);