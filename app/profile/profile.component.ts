import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  user:any;
  check:boolean=true;
  constructor()   
  {
    this.user=
    {
      name:'Lekshmi',
      job:'Software Developer',
      address:'Lekshmi,padinjattinkara,kottarakara',
      phone:['7558992896']
    };
   }
   togglecheck(){
     this.check=!this.check;
   }
  ngOnInit() {
  }

}
