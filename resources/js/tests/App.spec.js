import { mount } from '@vue/test-utils';
import { describe, it, expect } from 'vitest';
import App from '../components/auth/Login.vue';

describe('Login.vue', () => {
  it('debería renderizar correctamente', () => {
    const wrapper = mount(App);
    expect(wrapper.exists()).toBe(true);
  });

  it('debería montar el componente sin errores', () => {
    expect(() => mount(App)).not.toThrow();
  });
});
