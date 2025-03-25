<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_CONT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightLen extends AbstractTagGroup
{

  protected string $id = 'Real-CONT:CopyrightLen';

  protected string $name = 'CopyrightLen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::ContentDescr
       * line : 330155
       * type : int16u
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'Real::ContentDescr.Real-CONT:CopyrightLen',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 32;

}
