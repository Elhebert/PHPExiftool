<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameRate extends AbstractTagGroup
{

  protected string $id = 'Theora:FrameRate';

  protected string $name = 'FrameRate';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Theora::Identification
       * line : 394841
       * type : rational64u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Theora::Identification.Theora:FrameRate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
