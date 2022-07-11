<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightLen extends AbstractTagGroup
{

  protected string $id = 'Real-RA3:CopyrightLen';

  protected string $name = 'CopyrightLen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Copyright Len',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::AudioV3
       * line : 330045
       * type : int8u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Real::AudioV3.Real-RA3:CopyrightLen',
      'desc' => [
        'en' => 'Copyright Len',
      ],
    ],
  ];

}
