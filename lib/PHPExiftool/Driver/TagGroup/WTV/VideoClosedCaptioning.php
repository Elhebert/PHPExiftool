<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\WTV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoClosedCaptioning extends AbstractTagGroup
{

  protected string $id = 'WTV:VideoClosedCaptioning';

  protected string $name = 'VideoClosedCaptioning';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : WTV::Metadata
       * line : 396230
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'WTV::Metadata.WTV:VideoClosedCaptioning',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
