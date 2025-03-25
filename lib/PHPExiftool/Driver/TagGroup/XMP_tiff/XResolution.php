<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XResolution extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:XResolution';

  protected string $name = 'XResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412394
       * type : rational
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::tiff.XMP-tiff:XResolution',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
