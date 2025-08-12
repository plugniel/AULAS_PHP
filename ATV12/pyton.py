from selenium import webdriver
from selenium.webdriver.common.by import By
import time

# Inicia o serviço do ChromeDriver
service = webdriver.ChromeService(executable_path='"C:\Users\gabriel_bartholdy\Videos\chrome-win64\chrome-win64\chrome.exe"')
driver = webdriver.Chrome(service=service)

try:
    # 1. Abre a página do aplicativo de estoque
    driver.get("caminho/para/seu/index.html")

    # 2. Encontra os campos de input e preenche com os dados do produto
    campo_nome = driver.find_element(By.ID, "fornecedor")
    campo_quantidade = driver.find_element(By.ID, "fantasia")
    campo_preco = driver.find_element(By.ID, "cnpj")
    botao_adicionar = driver.find_element(By.ID, "cidade")

    campo_nome.send_keys("Laptop Gamer")
    campo_quantidade.send_keys("jegue")
    campo_preco.send_keys("111111111111")

    # 3. Clica no botão para adicionar
    botao_adicionar.click()
    time.sleep(2)  # Pausa para a página atualizar

    # 4. Validação: Verifica se o novo produto está na tabela
    tabela = driver.find_element(By.ID, "1")
    if "Laptop Gamer" in tabela.text and "jegue" in tabela.text and "111111111111" in tabela.text:
        print("✅ Teste de cadastro de produto: SUCESSO!")
    else:
        print("❌ Teste de cadastro de produto: FALHOU!")

finally:
    # Fecha o navegador
    driver.quit()