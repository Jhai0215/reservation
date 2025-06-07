// Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyAOjjKBtrCrkpnDeIlSXNglaYx0b7nsT7Q",
    authDomain: "finals-a3f1e.firebaseapp.com",
    databaseURL: "https://finals-a3f1e-default-rtdb.firebaseio.com",
    projectId: "finals-a3f1e",
    storageBucket: "finals-a3f1e.firebasestorage.app",
    messagingSenderId: "573121609790",
    appId: "1:573121609790:web:14a8eaebd5ec2680ff116f",
    measurementId: "G-R782FSBSHT"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// Reference to the database
var reservationRef = firebase.database().ref('bookform');

// Attach event listener to the form
document.getElementById('bookform').addEventListener("submit", bookform);

function bookform(e) {
    e.preventDefault();
    
    var fullname = getElementVal("fullname");
    var time = getElementVal("time");
    var date = getElementVal("date");
    var branch = getElementVal("branch");
    var phonenumber = getElementVal("phonenumber");
    var email = getElementVal("email");
    var tables = getElementVal("tables");
    var persons = getElementVal("persons");
    var reservation = getElementVal("reservation");

    saveReservations(fullname, time, date, branch, phonenumber, email, tables, persons, reservation);
 
    document.querySelector(".alert").style.display = "block"
    
    // Save the reservation to the database
    reservationRef.push({
        fullname,
        time,
        date,
        branch,
        phonenumber,
        email,
        tables,
        persons,
        reservation
    });
}

const saveReservations = (fullname, time, date, branch, phonenumber, email, tables, persons, reservation) =>{

    var bookform = reservationRef.push();

    newbookform.set({
        fullname: fullname,
        time: time,
        date: date,
        branch: branch,
        phonenumber: phonenumber,
        email: email,
        tables: tables,
        persons: persons,
        reservation: reservation
    })

};

// Function to get the value of an input element by ID
const getElementVal = (id) => {
    return document.getElementById(id).value;
};