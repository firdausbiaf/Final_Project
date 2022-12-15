/// <reference types="cypress" />

describe('User Can Open Login Page', () => {
    it('Login Page Can be Open and have correct specification', () => {
      cy.visit("http://localhost:8000/home");
      cy.get('b').should("have.text", "Megatronik");
      cy.get('.card-title').contains("Sign in to start your session");
      cy.get(':nth-child(2) > .form-control').should("have.text", "");
      cy.get('.btn').contains("Sign In").and("be.enabled");
      cy.get('label').contains("Remember Me");
    })
  })