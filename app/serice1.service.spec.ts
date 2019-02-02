import { TestBed } from '@angular/core/testing';

import { Serice1Service } from './serice1.service';

describe('Serice1Service', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: Serice1Service = TestBed.get(Serice1Service);
    expect(service).toBeTruthy();
  });
});
