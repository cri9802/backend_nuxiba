import { Component } from '@angular/core';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'utvt';
  nombre: string = "Garcia Cristian Joel";
 
  hex = "00ccff";
  color1: string = "red";
  
  numeros = [2,5,6,12];
  textos = ["A","b","C","D"];
 
  hobbys: string = "Estudiante";
  fecha = new Date();
  
  peliculas = [ 
  {"pelicula": "Alien","director": "Ridley Scott"},
  {"pelicula": "Alien","director": "Ridley Scott"}
  ];

}
 


