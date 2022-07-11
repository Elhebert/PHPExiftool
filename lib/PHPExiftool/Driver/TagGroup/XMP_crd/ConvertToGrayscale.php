<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ConvertToGrayscale extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:ConvertToGrayscale';

  protected string $name = 'ConvertToGrayscale';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Convert To Grayscale',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 399133
       * type : boolean
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::crd.XMP-crd:ConvertToGrayscale',
      'desc' => [
        'en' => 'Convert To Grayscale',
      ],
    ],
  ];

}
