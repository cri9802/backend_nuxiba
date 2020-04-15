import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-alumnos',
  templateUrl: './alumnos.component.html',
  styleUrls: ['./alumnos.component.css']
})
export class AlumnosComponent implements OnInit {
	
	
  Alumnos = [ 
  {"num": "1","matricula": "221611511","app": "garcia","apm": "Lopez","nombre": "cristian","fn": "02/02/1978","email": "al221611511@gmail.com","genero": "M"},
  {"num": "2","matricula": "331611511","app": "Jaimes","apm": "Perez","nombre": "Juan","fn": "02/02/1988","email": "al221611511@gmail.com","genero": "M"},
  {"num": "3","matricula": "441611511","app": "Perez","apm": "Aguilar","nombre": "Karla","fn": "02/02/1995","email": "al221611511@gmail.com","genero": "F"},
  {"num": "4","matricula": "551611511","app": "Flores","apm": "Zepeda","nombre": "Pedro","fn": "02/02/1998","email": "al221611511@gmail.com","genero": "M"},
  {"num": "5","matricula": "661611511","app": "Aguilar","apm": "Jimenez","nombre": "Jessica","fn": "02/02/2000","email": "al221611511@gmail.com","genero": "F"},
  {"num": "6","matricula": "771611511","app": "Gonzalez","apm": "Nava","nombre": "Abraham","fn": "02/02/2001","email": "al221611511@gmail.com","genero": "M"},
  {"num": "7","matricula": "881611511","app": "Hernandez","apm": "Segura","nombre": "Uriel","fn": "02/02/1999","email": "al221611511@gmail.com","genero": "M"},
  {"num": "8","matricula": "991611511","app": "Diaz","apm": "Martinez","nombre": "Lesly","fn": "02/02/1980","email": "al221611511@gmail.com","genero": "F"},
  {"num": "9","matricula": "101611511","app": "Alvaro","apm": "Sanchez","nombre": "Mariana","fn": "02/02/1985","email": "al221611511@gmail.com","genero": "F"},
  {"num": "10","matricula": "111611511","app": "garcia","apm": "Nieto","nombre": "Fanny","fn": "02/02/1991","email": "al221611511@gmail.com","genero": "F"},
  {"num": "11","matricula": "221611511","app": "garcia","apm": "piña","nombre": "cristian","fn": "02/02/1996","email": "al221611511@gmail.com","genero": "M"},
  {"num": "12","matricula": "221611511","app": "garcia","apm": "piña","nombre": "Alberto","fn": "02/02/1999","email": "al221611511@gmail.com","genero": "M"},
  {"num": "13","matricula": "221611511","app": "garcia","apm": "piña","nombre": "Carlos","fn": "02/02/1990","email": "al221611511@gmail.com","genero": "M"},
  {"num": "14","matricula": "221611511","app": "garcia","apm": "piña","nombre": "Daniel","fn": "02/02/1998","email": "al221611511@gmail.com","genero": "M"},
  {"num": "15","matricula": "221611511","app": "garcia","apm": "piña","nombre": "Javier","fn": "02/02/1994","email": "al221611511@gmail.com","genero": "M"}
  
  ]; 
  constructor() { }

  ngOnInit() {
  }
 

}
