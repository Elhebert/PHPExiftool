<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PageImageWidth extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:PageImageWidth';

  protected string $name = 'PageImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 412695
       * type : integer
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::xmp.XMP-xmp:PageImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
