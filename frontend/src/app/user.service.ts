import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { environment } from '../environments/environment';

import { User } from './user';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private http: HttpClient) {
    console.log('UserService loaded.');
  }

  get(): Observable<User> {
    return this.http.get<User>(environment.backendPath + '/api/user', {withCredentials: true});
  }
}
