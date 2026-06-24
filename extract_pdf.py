import sys
import io
sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')

from PyPDF2 import PdfReader

reader = PdfReader('buoi8_huong_dan_thuc_hanh.pdf')
for i in range(min(5, len(reader.pages))):
    text = reader.pages[i].extract_text()
    if text:
        print(f"=== PAGE {i+1} ===")
        print(text)
        print()
