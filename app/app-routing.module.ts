import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HeaderComponent } from './header/header.component';
import { LoginComponent } from './login/login.component';
import { ServiceComponent } from './service/service.component';
import { ApplyComponent } from './apply/apply.component';

const routes: Routes = [{path:'apply',component:ApplyComponent},{path:'login',component:LoginComponent},
{path:'service',component:ServiceComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
