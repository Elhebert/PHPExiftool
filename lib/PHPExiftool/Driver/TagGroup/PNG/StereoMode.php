<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StereoMode extends AbstractTagGroup
{

  protected string $id = 'PNG:StereoMode';

  protected string $name = 'StereoMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::StereoImage
       * line : 272753
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::StereoImage.PNG:StereoMode',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
