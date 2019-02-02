import { Component, OnInit } from '@angular/core';
import {student} from '../student';
import { from } from 'rxjs';
import {NgForm} from '@angular/forms';
import { Serice1Service } from '../serice1.service';
@Component({
  selector: 'app-apply',
  templateUrl: './apply.component.html',
  styleUrls: ['./apply.component.css']
})
export class ApplyComponent implements OnInit {
student=new student();
isRegistered=false;
  constructor(private applyService:Serice1Service) { }

  ngOnInit() {
  }
  registration(f:NgForm){
    this.applyService.store(this.student).subscribe(data =>{
      this.isRegistered=true;
      console.log("register successfully");
      f.reset();
    },
    (err) =>{this.isRegistered=false;
      console.log("try again");
    });
  }

}
