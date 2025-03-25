<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleRate extends AbstractTagGroup
{

  protected string $id = 'MAC:SampleRate';

  protected string $name = 'SampleRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::NewHeader
       * line : 394
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::NewHeader.MAC:SampleRate',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : APE::OldHeader
       * line : 431
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::OldHeader.MAC:SampleRate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
