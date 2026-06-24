import pdfplumber
import sys

sys.stdout.reconfigure(encoding='utf-8')

with pdfplumber.open(r"c:\laragon\www\phu-xuan-blog\buoi8_huong_dan_thuc_hanh.pdf") as pdf:
    for i, page in enumerate(pdf.pages):
        text = page.extract_text()
        if text:
            print(f"--- PAGE {i+1} ---")
            print(text)
