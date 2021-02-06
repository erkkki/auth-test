import { Component } from '@angular/core';

import { UserService } from './user.service';
import {Observable} from 'rxjs';
import {User} from './user';

import { environment } from '../environments/environment';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'front';
  path = environment.backendPath;

  user$: Observable<User>;

  constructor(
    private userService: UserService
  ) {
    this.user$ = this.userService.get();
  }
}
