<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileNumber extends AbstractTagGroup
{

  protected string $id = 'Nikon:FileNumber';

  protected string $name = 'FileNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Number',
    'fr' => 'Numéro de fichier',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::FileInfo
       * line : 192673
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::FileInfo.Nikon:FileNumber',
      'desc' => [
        'en' => 'File Number',
        'fr' => 'Numéro de fichier',
      ],
    ],
  ];

}
