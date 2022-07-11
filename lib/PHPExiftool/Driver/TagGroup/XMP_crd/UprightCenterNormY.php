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
class UprightCenterNormY extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:UprightCenterNormY';

  protected string $name = 'UprightCenterNormY';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Upright Center Norm Y',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 401563
       * type : real
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::crd.XMP-crd:UprightCenterNormY',
      'desc' => [
        'en' => 'Upright Center Norm Y',
      ],
    ],
  ];

}
