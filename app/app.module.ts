import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {} from './serice1.service';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LekshmiComponent } from './lekshmi/lekshmi.component';
import { HelloworldComponent } from './helloworld/helloworld.component';
import { ProfileComponent } from './profile/profile.component';
import { HeaderComponent } from './header/header.component';
import { LoginComponent } from './login/login.component';
import { ServiceComponent } from './service/service.component';
import { ApplyComponent } from './apply/apply.component';
import { Serice1Service } from './serice1.service';

@NgModule({
  declarations: [
    AppComponent,
    LekshmiComponent,
    HelloworldComponent,
    ProfileComponent,
    HeaderComponent,
    LoginComponent,
    ServiceComponent,
    ApplyComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [Serice1Service],
  bootstrap: [AppComponent]
})
export class AppModule { }
