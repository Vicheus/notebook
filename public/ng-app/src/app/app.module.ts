import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { APP_BASE_HREF } from '@angular/common';
import { BaseComponent } from './base/base.component';

const routes: Routes = [
    { path: '', component: BaseComponent },
];

@NgModule({
  declarations: [
    AppComponent,
    BaseComponent,
  ],
  imports: [
    RouterModule.forRoot(
        routes,
        { enableTracing: true } // <-- debugging purposes only
    ),
    BrowserModule,
    AppRoutingModule
  ],
  providers: [{provide: APP_BASE_HREF, useValue : '/' }],
  bootstrap: [AppComponent],
})
export class AppModule { }
