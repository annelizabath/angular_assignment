import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LekshmiComponent } from './lekshmi.component';

describe('LekshmiComponent', () => {
  let component: LekshmiComponent;
  let fixture: ComponentFixture<LekshmiComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LekshmiComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LekshmiComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
