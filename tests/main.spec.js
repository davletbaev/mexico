import faker from "faker";
import puppeteer from "puppeteer";

const lead = {
  name: faker.name.firstName(),
  email: faker.internet.email(),
  phone: faker.phone.phoneNumber(),
  message: faker.random.words()
};

let page;
let browser;
const width = 1366;
const height = 768;

beforeAll(async () => {
  browser = await puppeteer.launch({
    // headless: false,
    // slowMo: 80
  });
  page = await browser.newPage();
  await page.setViewport({ width, height });
});

afterAll(() => {
  browser.close();
});

describe('Home', () => {
  beforeAll(async () => {
    await page.goto('http://localhost:5000/', {waitUntil: 'domcontentloaded'})
    await page.screenshot({
      path: 'tests/screenshots/home.png',
      fullPage: true
    })
  });
  
  test('page title should be equal "Home"', async () => {
    const title = await page.title()
    expect(title).toEqual("Home")
  })

  test('h1 tag should contain "Hello world!" text', async () => {
    const h1 = await page.$eval('h1', el => el.textContent)
    expect(h1).toEqual('Hello world!')
  })
})