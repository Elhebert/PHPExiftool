<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JpgFromRawStart extends AbstractTagGroup
{

  protected string $id = 'SubIFD2:JpgFromRawStart';

  protected string $name = 'JpgFromRawStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 110675
       * type : int32u
       * writable : true
       * count : 
       * flags : permanent,protected
       */
      'id' => 'Exif::Main.SubIFD2:JpgFromRawStart',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2060;

}
