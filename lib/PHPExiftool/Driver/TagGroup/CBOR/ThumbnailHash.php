<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CBOR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailHash extends AbstractTagGroup
{

  protected string $id = 'CBOR:ThumbnailHash';

  protected string $name = 'ThumbnailHash';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CBOR::Main
       * line : 3776
       * type : ?
       * writable : false
       * count : 
       * flags : list
       */
      'id' => 'CBOR::Main.CBOR:ThumbnailHash',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 64;

}
