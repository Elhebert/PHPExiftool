<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Channel extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:Channel';

  protected string $name = 'Channel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 410763
       * type : struct
       * writable : true
       * count : 
       * flags : avoid,bag,list
       */
      'id' => 'XMP::prism.XMP-prism:Channel',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2369;

}
